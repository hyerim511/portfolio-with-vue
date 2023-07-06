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
    // scroll to each section
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

@import './assets/css/style.css';

#app {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
