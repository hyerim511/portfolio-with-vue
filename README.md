# Portfolio with Vue.js

This Project was built to study Vue.js and API.


## Planning & Design

This site is essentially a one-page website for a personal portfolio, including information about skills, resent works, and contact details. Althought it contains only simple information like a resume, the goal was to make it interactive and engaging. 


## Functionalities

### Changeable Text
The main text font changes when clicking the button below, and the name is also chaged when clicking the name. 
![Main text function](img-readme/mainText.gif)
```
changeFont(){
    this.randomFont = this.font[Math.floor(Math.random() * this.font.length)];
},
changeName(e){
    if(e.target.innerText === "Haley"){
        this.nameText = "Hyerim"
    } else {
        this.nameText = "Haley"
    }
}
```
```
h1 {
    font-family: v-bind(randomFont);
}
```

### Animation for Form
When clicking the resume button, the form slides up from the bottom of the site. 
![Main text function](img-readme/form.gif)


### Database with API
To manage the data of resent projects, an API was created using PHP, and this data is fetched into the Vue.js. 
```
async getProject() {
    try {
        let response = await fetch(this.projectApi);
        this.projectList = await response.json();
    } catch (error) {
        console.log(error);
    }
},
```


## Timelines

- Jun 27 - Jul 6, 2022 : Development
- Jul 26, 2023 : Added README