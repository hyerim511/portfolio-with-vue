<template>
    <figure>
        <img :src="require(`./../../assets/img/${detailProject.image}`)" :alt="detailProject.title">
        <figcaption>
            <h3>{{ detailProject.title }}</h3>
            <ul>
                <li>{{ detailProject.field }}</li>
            </ul>
            <p>{{ detailProject.description }}</p>
            <a :href="detailProject.url"><span></span>go to github</a>
        </figcaption>
    </figure>
</template>

<script>

export default {
    name: "ProjectDetail",
    props: {
        detailProject: {}
    },
}
</script>