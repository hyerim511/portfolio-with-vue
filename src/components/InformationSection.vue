<template>
    <section class="information">
        <div class="background"></div>
        <h2>Information</h2>
        <aside>
            <div>
                <a href="">kimhyerim511@gmail.com</a>
                <ul>
                    <li>
                        <a href="#" target="_blank">
                            <span class="material-symbols-outlined">arrow_outward</span>
                            github
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <span class="material-symbols-outlined">arrow_outward</span>
                            likedin
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <dl>
                    <dt>Web development Diploma</dt>
                    <dd>Tamwood Careers, Vancouver, Canada</dd>
                    <dt>Bachelor of Fine Arts / Visual Communication Design department</dt>
                    <dd>Hongik University, Seoul, Korea</dd>
                </dl>
                <ul>
                    <li>
                        <a href="#" target="_blank">
                            <span class="material-symbols-outlined">mountain_flag</span>
                            Vancouver, Canada
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <span class="material-symbols-outlined">quick_phrases</span>
                            Korean, English, Japanese
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <BtnResume @click="openResumeForm" />
        <div class="open-display " :class="{ open: openValue }">
            <ResumeForm />
        </div>
        
    </section>
</template>

<script>
import BtnResume from './elements/BtnResume.vue'
import ResumeForm from './elements/ResumeForm.vue'
export default {
    name: "InformationSection",
    components: {
        BtnResume,
        ResumeForm
    },
    data() {
        return {
            openValue: false
        }
    },
    methods: {
        openResumeForm() {
            this.openValue = !this.openValue;
        }
    }
}
</script>