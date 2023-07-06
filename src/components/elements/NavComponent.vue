<template>
    <nav>
        <ul>
            <li>
                <a href="#" @click="scrollUp()">
                    <p>go to top</p>
                    <span></span>
                </a>
            </li>
            <li>
                <a href="#" @click.prevent="getSection('skill')">
                    <p>skills</p>
                    <span></span>
                </a>
            </li>
            <li>
                <a href="#" @click.prevent="getSection('project')">
                    <p>project</p>
                    <span></span>
                </a>
            </li>
            <li>
                <a href="#" @click.prevent="getSection('information')">
                    <p>information</p>
                    <span></span>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>

export default {
    name: "NavComponent",
    methods: {
        scrollUp() {
            window.scrollTo(0,0);
        },
        getSection(sectionName) {
            this.$emit("getSection", sectionName);
        },
    }
}
</script>
