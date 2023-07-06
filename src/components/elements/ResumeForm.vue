<template>
    <!-- bg shape -->
    <div class="triangle-bg"></div>
    <div class="triangle"></div>
    <!-- form -->
    <section class="resume-form" v-on:submit.prevent="thanks">
        <form>
            <input type="text" placeholder="How can I call you?">
            <input type="email" placeholder="email@email.com">
            <input type="submit" value="OK!">
        </form>
    </section>
    <!-- after submit -->
    <section class="thanks-message" v-if="thanksMessage">
        <p>Thanks! I'm gonna send my resume to you soon :D</p>
    </section>
</template>

<script>
export default {
    name: "ResumeForm",
    data() {
        return {
            thanksMessage: false
        }
    },
    methods: {
        thanks() {
            this.thanksMessage = true;
        }
    }
}
</script>