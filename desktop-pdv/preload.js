'use strict';
const { contextBridge } = require('electron');
contextBridge.exposeInMainWorld('pdvDesktop', Object.freeze({
  isDesktop: true,
  platform: process.platform,
  version: '0.1.0',
}));
