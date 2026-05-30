/* =========================
 設定
========================= */
const DISPLAY_LIMIT = 10;

/*
 固定カテゴリ
 → 各カテゴリから最新1件取得
*/
const PIN_CATEGORIES = [
  "訪問看護(リハビリ)空き時間表",
  "ホームホスピスわこの家の入居状況",
  "Caféむゆうげん を開催致します",
  "ケアカフェむゆうげん を開催いたします",
];


/* =========================
 投稿を投稿日順にソート
========================= */
function sortByDate(posts) {
  return posts.sort(
    (a, b) => new Date(b.timestamp) - new Date(a.timestamp)
  );
}


/* =========================
 カテゴリごとに最新固定を取得
========================= */
function getPinnedPosts(posts) {

  const pinned = [];

  PIN_CATEGORIES.forEach(keyword => {

    const match = posts
      .filter(post =>
        post.caption && post.caption.includes(keyword)
      )
      .sort(
        (a, b) => new Date(b.timestamp) - new Date(a.timestamp)
      )[0];

    if (match) {
      pinned.push(match);
    }

  });

  // 固定同士も投稿日順にする
  return sortByDate(pinned);
}


/* =========================
 表示配列作成
========================= */
function buildDisplayPosts(posts) {

  posts = sortByDate(posts);

  const pinnedPosts = getPinnedPosts(posts);

  const pinnedIds = pinnedPosts.map(p => p.id);

  const normalPosts = posts.filter(
    p => !pinnedIds.includes(p.id)
  );

  return [...pinnedPosts, ...normalPosts]
    .slice(0, DISPLAY_LIMIT);
}


/* =========================
 画像URL取得（動画対応）
========================= */
function getImageUrl(post) {

  if (post.media_type === "VIDEO") {
    return post.thumbnail_url || post.media_url;
  }

  return post.media_url;
}


/* =========================
 HTML描画
========================= */
function renderInstagram(posts) {

  const grid = document.getElementById("instagram-grid");
  grid.innerHTML = "";

  posts.forEach((post, index) => {

    const div = document.createElement("div");

    // 固定投稿にclass付与
    if (index < PIN_CATEGORIES.length) {
      div.classList.add("instagram-pinned");
    }

    div.innerHTML = `
      <a href="${post.permalink}" target="_blank" rel="noopener">
        <img src="${getImageUrl(post)}" alt="">
      </a>
    `;

    grid.appendChild(div);
  });
}


/* =========================
 Instagram取得
========================= */
async function loadInstagram() {

  const res = await fetch("/wp-json/custom/v1/instagram");
  const posts = await res.json();

  const displayPosts = buildDisplayPosts(posts);

  renderInstagram(displayPosts);
}

loadInstagram();