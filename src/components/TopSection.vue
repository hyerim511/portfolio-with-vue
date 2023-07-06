<template>
    <section class="top">
        <div class="background"></div>
        <div class="background2"></div>
        <h1>Hi there!</h1>
        <div class="line-name">
            <h1>My name is</h1>
            <h1 class="name" @click="changeName($event)">{{ nameText }}</h1>
        </div>
        <h1>I'm a</h1>
        <h1>
            {{ textValue }}
            <span class="blinking">|</span>
        </h1>
        <BtnChange @click="changeFont()"/>
    </section>
</template>

<script>
import BtnChange from './elements/BtnChange.vue'
export default {
    name: "TopSection",
    components: {
        BtnChange,
    },
    data() {
        return {
          textValue: "",
          textStatus: false,
          displayText: ["Web Developer", "Graphic Designer", "UIUX Designer"],
          typingSpeed: 100,
          erasingSpeed: 100,
          newTextDelay: 2000,
          displayTextIndex: 0,
          charIndex: 0,
          font: ["'Bodoni Moda', serif","'Julius Sans One', sans-serif","'Rock Salt', cursive","'Megrim', cursive","'Rubik Moonrocks', cursive"],
          randomFont: "'Bodoni Moda', serif",
          nameText: "Haley"
        }
    },
    created() {
      setTimeout(this.typeText, this.newTextDelay + 200);
    },
  methods: {
    // typing effect
    typeText() {
      if (this.charIndex < this.displayText[this.displayTextIndex].length) {
        if (!this.textStatus) this.textStatus = true;
        this.textValue += this.displayText[this.displayTextIndex].charAt(
          this.charIndex
        );
        this.charIndex += 1;
        setTimeout(this.typeText, this.typingSpeed);
        } else {
            this.textStatus = false;
            setTimeout(this.eraseText, this.newTextDelay);
        }
    },
    eraseText() {
      if (this.charIndex > 0) {
        if (!this.textStatus) this.textStatus = true;
        this.textValue = this.displayText[this.displayTextIndex].substring(
          0,
          this.charIndex - 1
        );
        this.charIndex -= 1;
        setTimeout(this.eraseText, this.erasingSpeed);
        } else {
            this.textStatus = false;
            this.displayTextIndex += 1;
            if (this.displayTextIndex >= this.displayText.length)
            this.displayTextIndex = 0;
            setTimeout(this.typeText, this.typingSpeed + 1000);
        }
    },
    // change top section font
    changeFont(){
        this.randomFont = this.font[Math.floor(Math.random() * this.font.length)];
    },
    // change name haley-hyerim
    changeName(e){
        if(e.target.innerText === "Haley"){
            this.nameText = "Hyerim"
        } else {
            this.nameText = "Haley"
        }
    }
    },
}
</script>

<style scoped>

/* style for change font function */
h1 {
    font-family: v-bind(randomFont);
}

</style>