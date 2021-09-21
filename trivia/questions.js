// var uchoice=document.getElementsByTagName('button[type:submit]');

const quizQue =[
    "Nintendo’s translated name means “Persevere and Win.",
    "Nintendo was founded in 19th-century Japan and started out by making playing cards.",
    "Mario Kart is Nintendo’s best-selling game as of March 2021.",
    "In order to make a new character with limited system memory, Luigi is a combination of Mario and Yoshi.",
    "Kirby’s original name was Tinkle Popo.",
    "Nintendo became the yakuza’s number-one card manufacturer.",
    "The original name for the Nintendo DS was Nintendo Traveller",
    "Nintendo’s first protagonist was Mr. Game & Watch."
    
];




 var ran1 = Math.floor(Math.random()*8);

    const element = document.getElementById("nis");
    element.innerHTML=quizQue[ran1];







// const quiz = document.getElementById('quiz');
// const answer = document.querySelectorAll('submit1');
// const quest = document.getElementById('question')

// const question = document.querySelector('#question');
// const submit1 = document.querySelector('#submit1');
// const submit2 = document.querySelector('#submit2');

// let questionCount = 0;
// const loadQuestion = () => {
//     const questionList=quizQue[questionCount];
//     question.innerTEXT = questionList.que;
//     submit1.innerTEXT = questionList.choices;
//     submit2.innerTEXT = questionList.choices;
// } 

// loadQuestion();

// var ran = ;
// var question = document.querySelectorAll("h3")[0]; 
// question.setAttribute(".question",que);

// timer 
var seconds =15, 
$seconds= document.querySelector("#timer_sec");
(function countdown(){
    $seconds.textContent = seconds + (seconds==0 ? '' : 's')
    if(seconds --> 0)
    setTimeout(countdown,1000)
})();


// reload 
const reloadbtn = document.querySelector("#reload");

function reload(){
    reload=location.reload();
}
reloadbtn.addEventListener("click",reload,false);