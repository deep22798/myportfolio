import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js';
import Engine from './core/Engine.js';
import Camera from './core/Camera.js';
import SceneManager from './core/SceneManager.js';

const engine = new Engine();
const camera = new Camera();
const sceneManager = new SceneManager();
let isExiting = false;

camera.instance.position.set(0, 1.5, 5);

let gallery = [];
const loader = new THREE.TextureLoader();

async function loadProject() {
  const res = await fetch(`/api/projects/${window.PROJECT_SLUG}`);
  const project = await res.json();

  const images = JSON.parse(project.gallery || '[]');

  images.forEach((img, i) => {
    const texture = loader.load(`/uploads/projects/gallery/${img}`);

    const material = new THREE.MeshStandardMaterial({
      map: texture,
      metalness: 0.3,
      roughness: 0.25,
      emissive: new THREE.Color(0x001111)
    });

    const geometry = new THREE.PlaneGeometry(2, 1.2);
    const plane = new THREE.Mesh(geometry, material);

    plane.position.set(0, 0, -i * 2);
    sceneManager.scene.add(plane);
    gallery.push(plane);
  });
}


loadProject();
document.getElementById('backBtn').addEventListener('click', () => {
  isExiting = true;
});

window.addEventListener('wheel', e => {
  camera.instance.position.z += e.deltaY * 0.005;
});

window.addEventListener('resize', () => {
  engine.resize();
  camera.resize();
});

const clock = new THREE.Clock();
function animate() {
  const t = clock.getElapsedTime();

  gallery.forEach((plane, i) => {
    plane.position.y = Math.sin(t + i) * 0.05;
  });

  if (isExiting) {
    camera.instance.position.z += 0.1;

    if (camera.instance.position.z > 10) {
      window.location.href = '/';
    }
  }

  engine.render(sceneManager.scene, camera.instance);
  requestAnimationFrame(animate);
}

animate();
