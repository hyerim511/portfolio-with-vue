<template>
    <section class="project">
        <h2>Project</h2>
        <ul>
            <li v-for="project in projectList" :key="project.id" @click="details(project)">
                <figure>
                    <img :src="require('@/assets/img/' + project.image)" :alt="project.title">
                    <figcaption>
                        <!-- <p>{{ project.title }}</p> -->
                    </figcaption>
                </figure>
            </li>
        </ul>
        <div v-if="showDetail">
            <section class="project-detail " :class="{ display: showDetail }">
                <ProjectDetail :detailProject="this.projectSelect"/>
                <button @click="showDetail=false">
                    <span class="material-symbols-outlined">
                    arrow_forward
                    </span>
                </button>
            </section>
        </div>
    </section>
</template>

<script>
import ProjectDetail from './elements/ProjectDetail.vue'

export default {
    name: "ProjectSection",
    components: {
        ProjectDetail
    },
    data() {
        return {
            showDetail: false,
            projectList: [],
            projectSelect: {},
            projectApi: 'http://localhost/wd6/portfolio-vue/api/project.php'
        }
    },
    methods: {
        details(project) {
            this.showDetail = !this.showDetail;
            this.projectSelect = project;
            console.log(this.projectSelect);
        },
        async getProject() {
                try {
                    let response = await fetch(this.projectApi);
                    this.projectList = await response.json();
                } catch (error) {
                    console.log(error);
                }
        },
    },
    created() {
            this.getProject();
    }
}
</script>
