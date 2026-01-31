/* =========================
  設定値
========================= */
const ACCESS_TOKEN = "EAAhTHwMuUIwBQs9zyUSvidkQeOqPGuM9JX7A0NucMd4uegVUjEOTcVaZCmKc93z6Xf6rsbWjVWgyO7sFrYXbkTIHqq4ZAOeok6c9b803NDZAcwOfZCFMCrrq3i7VdtO5eOMLG0PV3MTkA2Ae60EMYGGQoWAmLS7pbSFsyCOo3fXODWLFOQVtwo2lu0Kj7ZAQYM2hR";
const IG_USER_ID = "17841446314930709";
const DISPLAY_LIMIT = 10;

/* 固定判定に使う文言 */
const PIN_KEYWORD = "訪問看護(リハビリ)空き時間表";

/* =========================
  年月抽出（YYYY年M月）
========================= */
function extractYearMonth(caption) {
  if (!caption) return null;

  const match = caption.match(/(\d{4})年\s*(\d{1,2})月/);
  if (!match) return null;

  return {
    year: Number(match[1]),
    month: Number(match[2]),
    value: Number(match[1]) * 100 + Number(match[2]) // 比較用
  };
}

/* =========================
  固定投稿を取得（最新年月）
========================= */
function getPinnedPost(posts) {
  const candidates = posts
    .map(post => {
      if (!post.caption || !post.caption.includes(PIN_KEYWORD)) return null;

      const ym = extractYearMonth(post.caption);
      if (!ym) return null;

      return { ...post, ymValue: ym.value };
    })
    .filter(Boolean);

  if (candidates.length === 0) return null;

  // 年月が一番新しい投稿を固定扱い
  return candidates.sort((a, b) => b.ymValue - a.ymValue)[0];
}

/* =========================
  表示用配列作成
========================= */
function buildDisplayPosts(posts) {
  const pinned = getPinnedPost(posts);

  const normalPosts = pinned
    ? posts.filter(p => p.id !== pinned.id)
    : posts;

  const result = pinned
    ? [pinned, ...normalPosts]
    : normalPosts;

  return result.slice(0, DISPLAY_LIMIT);
}

/* =========================
  HTML描画
========================= */
function renderInstagram(posts) {
  const grid = document.getElementById("instagram-grid");
  grid.innerHTML = "";

  posts.forEach(post => {
    const div = document.createElement("div");
    div.innerHTML = `
      <a href="${post.permalink}" target="_blank" rel="noopener">
        <img src="${post.media_url}" alt="">
      </a>
    `;
    grid.appendChild(div);
  });
}

/* =========================
  Instagram取得
========================= */
async function loadInstagram() {
  try {
    const res = await fetch(
      `https://graph.facebook.com/v19.0/${IG_USER_ID}/media` +
      `?fields=id,caption,media_url,permalink,timestamp` +
      `&limit=25&access_token=${ACCESS_TOKEN}`
    );

    const json = await res.json();
    if (!json.data) throw new Error("Instagram API error");

    const displayPosts = buildDisplayPosts(json.data);
    renderInstagram(displayPosts);

  } catch (e) {
    console.error("Instagram表示エラー", e);
  }
}

loadInstagram();