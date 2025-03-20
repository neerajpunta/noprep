document.getElementById('acceptCookies').addEventListener('click', () => {
    document.getElementById('cookiePopup').style.display = 'none';
    gtag('event', 'cookie_accept');
});

document.getElementById('openPreferences').addEventListener('click', () => {
    document.getElementById('preferencesModal').style.display = 'block';
});

document.getElementById('closeModal').addEventListener('click', () => {
    document.getElementById('preferencesModal').style.display = 'none';
});

document.getElementById('closePopup').addEventListener('click', () => {
    document.getElementById('cookiePopup').style.display = 'none';
});
