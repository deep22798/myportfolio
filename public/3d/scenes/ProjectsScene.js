import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js';

export default class ProjectsScene {
  constructor(scene, camera) {
    this.scene = scene;
    this.camera = camera;
    this.cards = [];
    this.loader = new THREE.TextureLoader();

    this.raycaster = new THREE.Raycaster();
    this.mouse = new THREE.Vector2();
    this.hovered = null;


document.getElementById('webgl')
  .addEventListener('mousemove', e => this.onMouseMove(e));

document.getElementById('webgl')
  .addEventListener('click', () => this.onClick());

    this.loadProjects();
  }

  async loadProjects() {
    const res = await fetch('/api/projects');
    const projects = await res.json();

    projects.forEach((project, i) => {
      this.createCard(project, i);
    });
  }

  createCard(project, index) {
    const texture = this.loader.load(
      `/uploads/projects/thumbs/${project.thumbnail}`
    );

    const material = new THREE.MeshStandardMaterial({
      map: texture,
      metalness: 0.4,
      roughness: 0.25,
      emissive: new THREE.Color(0x001111)
    });

    const geometry = new THREE.PlaneGeometry(1.6, 1);
    const card = new THREE.Mesh(geometry, material);

    card.position.set(index * 2 - 2, 0, 0);
    card.userData = project;

    this.scene.add(card);
    this.cards.push(card);
  }

  onMouseMove(event) {
    this.mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
    this.mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
  }

  onClick() {
    if (!this.hovered) return;

    // Cinematic camera zoom
    this.camera.instance.position.z = 2.5;
    this.camera.lookAt(this.hovered.position);
    

    console.log('PROJECT CLICKED:', this.hovered.userData.slug);
    // Next step: route to /project/{slug}
  }

 update(time) {
  this.camera.lookAt(new THREE.Vector3(0, 0, 0));
    // Floating animation
    this.cards.forEach((card, i) => {
      card.position.y = Math.sin(time + i) * 0.05;
      card.material.emissiveIntensity = 0.3;
    });

    // Raycasting
    this.raycaster.setFromCamera(this.mouse, this.camera.instance);
    const intersects = this.raycaster.intersectObjects(this.cards);

    if (intersects.length) {
      const card = intersects[0].object;

      if (this.hovered !== card) {
        if (this.hovered) {
          this.hovered.position.z = 0;
          this.hovered.material.emissive.setHex(0x001111);
        }

        this.hovered = card;
        card.position.z = 0.3;
        card.material.emissive.setHex(0x00ffff);
      }
    } else if (this.hovered) {
      this.hovered.position.z = 0;
      this.hovered.material.emissive.setHex(0x001111);
      this.hovered = null;
    }
  }
}
