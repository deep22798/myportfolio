import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js';

export default class HomeScene {
  constructor(scene) {
    this.scene = scene;

    const geometry = new THREE.BoxGeometry(1.5, 1.5, 1.5);
    const material = new THREE.MeshStandardMaterial({
      color: 0x00ffff,
      emissive: 0x001111,
      metalness: 0.8,
      roughness: 0.2
    });

    this.cube = new THREE.Mesh(geometry, material);
    this.scene.add(this.cube);
  }

  update(time) {
    this.cube.rotation.y += 0.005;
    this.cube.rotation.x += 0.003;
  }
}
