'use strict';
const { app, BrowserWindow, shell } = require('electron');
const path = require('node:path');
let window;
function openWindow() {
  window = new BrowserWindow({
    width: 1450, height: 900, minWidth: 1050, minHeight: 680,
    backgroundColor: '#f5f7fa', autoHideMenuBar: true,
    title: 'Lumus PDV | Desktop',
    webPreferences: { preload: path.join(__dirname, 'preload.js'), contextIsolation: true, sandbox: true, nodeIntegration: false, webSecurity: true }
  });
  window.loadFile(path.join(__dirname, 'renderer', 'index.html'));
  window.webContents.setWindowOpenHandler(() => ({ action: 'deny' }));
  window.webContents.on('will-navigate', (event, url) => {
    if (!url.startsWith('file://')) event.preventDefault();
  });
}
app.whenReady().then(() => {
  openWindow();
  app.on('activate', () => { if (BrowserWindow.getAllWindows().length === 0) openWindow(); });
});
app.on('window-all-closed', () => { if (process.platform !== 'darwin') app.quit(); });
