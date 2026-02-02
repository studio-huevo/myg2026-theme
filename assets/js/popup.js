document.addEventListener('DOMContentLoaded', function() {
    const popupBtn = document.querySelector('.btn--yellow.btn--circle');
    const popupOverlay = document.getElementById('imagePopup');
    const popupImage = document.getElementById('popupImage');
    const closeBtn = document.querySelector('.image-popup-close');
    const zoomInBtn = document.getElementById('zoomIn');
    const zoomOutBtn = document.getElementById('zoomOut');
    const resetZoomBtn = document.getElementById('resetZoom');
    
    let currentScale = 1;
    const minScale = 0.5;
    const maxScale = 3;
    const scaleStep = 0.2;
    
    // ポップアップを開く
    popupBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const imageUrl = this.getAttribute('href');
        
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
    });
    
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
    });
    
    // マウスホイールでズーム
    popupImage.addEventListener('wheel', function(e) {
        e.preventDefault();
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
});