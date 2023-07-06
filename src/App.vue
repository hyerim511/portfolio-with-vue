<template>
  <NavComponent @getSection="scrollSection"/>
  <main>
    <TopSection />
    <span ref="skill"></span>
    <SkillSection/>
    <span ref="project"></span>
    <ProjectSection />
    <span ref="information"></span>
    <InformationSection />
  </main>
</template>

<script>

import NavComponent from './components/elements/NavComponent.vue'
import TopSection from './components/TopSection.vue'
import SkillSection from './components/SkillSection.vue'
import ProjectSection from './components/ProjectSection.vue'
import InformationSection from './components/InformationSection.vue'

export default {
  name: 'App',
  components: {
    NavComponent,
    TopSection,
    SkillSection,
    ProjectSection,
    InformationSection
  },
  methods: {
    scrollSection(name) {
            const top = this.$refs[(name)].offsetTop;
            window.scrollTo({
                top: top,
                left: 0,
                behavior: 'smooth'
            });
        },
  }
}
</script>

<style>

@import url("https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200");
@import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;800;900&family=Julius+Sans+One&family=Megrim&family=Open+Sans:wght@300;400;700;800&family=Rock+Salt&family=Rubik+Moonrocks&display=swap');

@import './assets/css/style.css';

#app {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
