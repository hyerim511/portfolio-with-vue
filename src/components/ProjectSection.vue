<template>
    <section class="project">
        <h2>Project</h2>
        <ul>
            <li @click="details">
                <figure>
                    <img :src="require('@/assets/img/' + project.readvice)" alt="">
                    <figcaption>
                        <!-- <p>readvice</p> -->
                    </figcaption>
                </figure>
            </li>
            <li @click="details">
                <figure>
                    <img :src="require('@/assets/img/' + project.jewelry)" alt="">
                    <figcaption>
                        <!-- <p>jewelrylane</p> -->
                    </figcaption>
                </figure>
            </li>
            <li @click="details">
                <figure>
                    <img :src="require('@/assets/img/' + project.mung)" alt="">
                    <figcaption>
                        <!-- <p>mung</p> -->
                    </figcaption>
                </figure>
            </li>
            <li @click="details">
                <figure>
                    <img :src="require('@/assets/img/' + project.kave)" alt="">
                    <figcaption>
                        <!-- <p>kavecon</p> -->
                    </figcaption>
                </figure>
            </li>
            <li @click="details">
                <figure>
                    <img :src="require('@/assets/img/' + project.cosmos)" alt="">
                    <figcaption>
                        <!-- <p>cosmos</p> -->
                    </figcaption>
                </figure>
            </li>
            <li @click="details">
                <figure>
                    <img :src="require('@/assets/img/' + project.fake)" alt="">
                    <figcaption>
                        <!-- <p>fakemuseum</p> -->
                    </figcaption>
                </figure>
            </li>
        </ul>
    <section class="project-detail " :class="{ display: showDetail }">
        <ProjectDetail />
        <button @click="details">
            <span class="material-symbols-outlined">
            arrow_forward
            </span>
        </button>
    </section>
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
            project: {
                readvice: 'project-readvice.png',
                jewelry: 'project-jewelry.png',
                mung: 'project-mung.gif',
                kave: 'project-kave.png',
                cosmos: 'project-cosmos.png',
                fake: 'project-fake.png',
            },
        }
    },
    methods: {
        details() {
            this.showDetail = !this.showDetail;
        }
    }
}
</script>
