import './bootstrap';
import '../css/app.css';

function showShift() {
    document.getElementById('popupShift').classList.remove('hidden');
}

function hideShift() {
    document.getElementById('popupShift').classList.add('hidden');
} 

function showChangePass() {
    console.log("Popup function called");
    document.getElementById('popupChangePass').classList.remove('hidden');
}

function hideChangePass() {
    document.getElementById('popupChangePass').classList.add('hidden');
}

function showGem() {
    document.getElementById('popupShift').classList.remove('hidden');
}

function hideGem() {
    document.getElementById('popupShift').classList.add('hidden');
} 

window.showShift = showShift;
window.hideShift = hideShift;
window.showChangePass = showChangePass;
window.hideChangePass = hideChangePass;
window.showGem = showGem;
window.hideGem = hideGem;