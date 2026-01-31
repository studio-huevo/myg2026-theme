document.addEventListener('DOMContentLoaded', function() {
    const popupBtns = document.querySelectorAll('.wako-photo');
    const popupOverlay = document.getElementById('imagePopup');
    const popupImage = document.getElementById('popupImage');
    const closeBtn = document.querySelector('.image-popup-close');
    const zoomInBtn = document.getElementById('zoomIn');
    const zoomOutBtn = document.getElementById('zoomOut');
    const resetZoomBtn = document.getElementById('resetZoom');

    // ナビゲーションボタンを取得
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const imageCounter = document.getElementById('imageCounter');
    
    let currentScale = 1;
    const minScale = 0.5;
    const maxScale = 3;
    const scaleStep = 0.2;
    
    // 現在表示中の画像インデックスと全画像URLを保持
    let currentImageIndex = 0;
    let imageUrls = [];
    
    // 画像URLを収集
    popupBtns.forEach(function(btn) {
        imageUrls.push(btn.getAttribute('href'));
    });
    
    // すべてのボタンにイベントリスナーを追加
    popupBtns.forEach(function(popupBtn, index) {
        popupBtn.addEventListener('click', function(e) {
            e.preventDefault();
            currentImageIndex = index;
            openPopup(imageUrls[currentImageIndex]);
            updateCounter();
        });
    });
    
    // ポップアップを開く関数
    function openPopup(imageUrl) {
        // 画像を事前ロード
        const img = new Image();
        img.onload = function() {
            popupImage.src = imageUrl;
            
            // 画像サイズに応じた初期表示
            resetZoom();
            
            popupOverlay.style.display = 'flex';
            document.body.style.overflow = 'hidden';
            
            // 画像がウィンドウに収まるように調整
            setTimeout(() => {
                fitImageToScreen();
            }, 100);
        };
        img.src = imageUrl;
    }
    
    // 前の画像へ
    prevBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        currentImageIndex--;
        if (currentImageIndex < 0) {
            currentImageIndex = imageUrls.length - 1; // 最後の画像へループ
        }
        openPopup(imageUrls[currentImageIndex]);
        updateCounter();
    });
    
    // 次の画像へ
    nextBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        currentImageIndex++;
        if (currentImageIndex >= imageUrls.length) {
            currentImageIndex = 0; // 最初の画像へループ
        }
        openPopup(imageUrls[currentImageIndex]);
        updateCounter();
    });
    
    // カウンター更新
    function updateCounter() {
        imageCounter.textContent = `${currentImageIndex + 1} / ${imageUrls.length}`;
    }
    
    // 画像を画面に合わせる
    function fitImageToScreen() {
        const container = popupImage.parentElement;
        const containerWidth = container.clientWidth;
        const containerHeight = container.clientHeight;
        const imgWidth = popupImage.naturalWidth;
        const imgHeight = popupImage.naturalHeight;
        
        // 画像がコンテナより大きい場合は縮小
        if (imgWidth > containerWidth || imgHeight > containerHeight) {
            const widthRatio = containerWidth / imgWidth;
            const heightRatio = containerHeight / imgHeight;
            //currentScale = Math.min(widthRatio, heightRatio) * 0.9; // 90%にしておく
            applyZoom();
        } else {
            resetZoom();
        }
    }
    
    // ズームを適用
    function applyZoom() {
        popupImage.style.transform = `scale(${currentScale})`;
        popupImage.style.transformOrigin = 'center center';
    }
    
    // ズームイン
    zoomInBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        if (currentScale < maxScale) {
            currentScale += scaleStep;
            applyZoom();
        }
    });
    
    // ズームアウト
    zoomOutBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        if (currentScale > minScale) {
            currentScale -= scaleStep;
            applyZoom();
        }
    });
    
    // ズームリセット
    resetZoomBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        resetZoom();
    });
    
    function resetZoom() {
        currentScale = 1;
        applyZoom();
    }
    
    // 閉じるボタン
    closeBtn.addEventListener('click', closePopup);
    
    // オーバーレイクリックで閉じる
    popupOverlay.addEventListener('click', function(e) {
        if (e.target === this || e.target.classList.contains('image-popup-container')) {
            closePopup();
        }
    });
    
    // ESCキーで閉じる
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && popupOverlay.style.display === 'flex') {
            closePopup();
        }
        // 左右キーでナビゲーション
        if (popupOverlay.style.display === 'flex') {
            if (e.key === 'ArrowLeft') {
                prevBtn.click();
            } else if (e.key === 'ArrowRight') {
                nextBtn.click();
            }
        }
    });
    
    // マウスホイールでズーム（Ctrlキーを押している場合）またはナビゲーション
    popupImage.addEventListener('wheel', function(e) {
        e.preventDefault();
        
        // Ctrlキーが押されている場合はズーム
        if (e.ctrlKey) {
            if (e.deltaY < 0) {
                // ズームイン
                if (currentScale < maxScale) {
                    currentScale += scaleStep;
                }
            } else {
                // ズームアウト
                if (currentScale > minScale) {
                    currentScale -= scaleStep;
                }
            }
            applyZoom();
        } else {
            // Ctrlキーが押されていない場合はナビゲーション
            if (e.deltaY > 0) {
                // 下スクロールで次の画像
                nextBtn.click();
            } else {
                // 上スクロールで前の画像
                prevBtn.click();
            }
        }
    });
    
    function closePopup() {
        popupOverlay.style.display = 'none';
        document.body.style.overflow = 'auto';
        // 閉じる時にズームをリセット
        resetZoom();
    }
    
    // 画面サイズ変更時の対応
    window.addEventListener('resize', function() {
        if (popupOverlay.style.display === 'flex') {
            fitImageToScreen();
        }
    });

    // スワイプ対応（タッチデバイス用）
    let touchStartX = 0;
    let touchEndX = 0;
    
    popupImage.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    popupImage.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50; // スワイップの閾値（px）
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                // 左スワイプ（次の画像）
                nextBtn.click();
            } else {
                // 右スワイプ（前の画像）
                prevBtn.click();
            }
        }
    }
});