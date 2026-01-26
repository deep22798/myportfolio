import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js';
import Engine from './core/Engine.js';
import Camera from './core/Camera.js';
import SceneManager from './core/SceneManager.js';
import ProjectsScene from './scenes/ProjectsScene.js';

const engine = new Engine();
const camera = new Camera();
const sceneManager = new SceneManager();
const projectsScene = new ProjectsScene(sceneManager.scene, camera);

window.addEventListener('resize', () => {
  engine.resize();
  camera.resize();
});

const clock = new THREE.Clock();

function animate() {
  const elapsed = clock.getElapsedTime();
  projectsScene.update(elapsed);
  engine.render(sceneManager.scene, camera.instance);
  requestAnimationFrame(animate);
}

animate();
