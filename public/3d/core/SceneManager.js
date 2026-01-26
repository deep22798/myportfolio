import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js';

export default class SceneManager {
  constructor() {
    this.scene = new THREE.Scene();
    this.scene.fog = new THREE.Fog(0x000000, 5, 20);

    // Ambient (dark base)
    const ambient = new THREE.AmbientLight(0x222222);
    this.scene.add(ambient);

    // Neon key light
    const light = new THREE.PointLight(0x00ffff, 1.5, 30);
    light.position.set(2, 4, 5);
    this.scene.add(light);
  }
}
