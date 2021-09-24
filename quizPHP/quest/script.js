const q =[
    {
        question1: "Q1:Nintendo’s translated name means “Persevere and Win.",
        a:"true",
        b:"false",
        ans1:"a"
    },
    {
        question1: "Q2: Nintendo was founded in 19th-century Japan and started out by making playing cards.",
        a:"true",
        b:"false",
        ans1:"b"
    },
    {
        question1: "Q3: Mario Kart is Nintendo’s best-selling game as of March 2021.",
        a:"true",
        b:"false",
        ans1:"a"
    }
];

const question= document.querySelector('.questions');
const option1 = document.querySelector('#ans1');
const option2 = document.querySelector('#ans2');
const submit= document.querySelector('#submit');

const answers = document.querySelectorAll('.answer');

let count=0;
let score=0;
let showS = document.querySelector('#show');

const loadQuestion=( ) =>{
    const queList =  q[count];
    question.innerText = queList.question1;
    option1.innerHTML = queList.a;
    option2.innerHTML = queList.b;
  
}


loadQuestion();

const getCheckAns = ( ) =>{
    let answer;
    answers.forEach((currentAns) => {
        if(currentAns.checked){
            answer = currentAns.id;
        }
    });
    return answer;
};


option1.addEventListener('click', ( ) =>{
    const checkAns = getCheckAns();
    console.log(checkAns);

    if(checkAns===q[count].ans1){
        score++;
    };

    count++;
    if(count < q.length){
        loadQuestion();
    }
});

option2.addEventListener('click', ( ) =>{
    const checkAns = getCheckAns();
    console.log(checkAns);

    if(checkAns===q[count].ans1){
        score++;
    };

    count++;
    if(count < q.length){
        loadQuestion();
    }
});



submit.addEventListener('click', ( ) =>{
    const checkAns = getCheckAns();
    console.log(checkAns);
    showS.innerHTML= `
    <h3>Your Score: ${score}/${q.length} </h3>
    <button class="bt" onclick="location.reload()">Play Again</button>
    `;

    showS.classList.remove('scoreA');
});

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