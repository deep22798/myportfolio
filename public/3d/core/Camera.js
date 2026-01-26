import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js';

export default class Camera {
  constructor() {
    this.instance = new THREE.PerspectiveCamera(
      45,
      window.innerWidth / window.innerHeight,
      0.1,
      100
    );

    this.target = new THREE.Vector3(0, 0, 0);
    this.instance.position.set(0, 1.5, 6);
  }

  lookAt(vec) {
    this.target.copy(vec);
    this.instance.lookAt(this.target);
  }

  resize() {
    this.instance.aspect = window.innerWidth / window.innerHeight;
    this.instance.updateProjectionMatrix();
  }
}
