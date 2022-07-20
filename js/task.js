const taskBtn1 = document.getElementById('taskBtn1');
const taskBtn2 = document.getElementById('taskBtn2');
const taskBtn3 = document.getElementById('taskBtn3');
const taskBtn4 = document.getElementById('taskBtn4');
const taskBtn5 = document.getElementById('taskBtn5');
const taskBtn6 = document.getElementById('taskBtn6');
const taskContent1 = document.getElementById('taskContent1');
const taskContent2 = document.getElementById('taskContent2');
const taskContent3 = document.getElementById('taskContent3');
const taskContent4 = document.getElementById('taskContent4');
const taskContent5 = document.getElementById('taskContent5');
const taskContent6 = document.getElementById('taskContent6');
const taskText = document.getElementById('taskText');
const clearDiv = ()=>{
    taskContent1.style.display = "none";
    taskContent2.style.display = "none";
    taskContent3.style.display = "none";
    taskContent4.style.display = "none";
    taskContent5.style.display = "none";
    taskContent6.style.display = "none";
    taskText.innerHTML = "";
}

taskBtn1.addEventListener('click',()=>{
    clearDiv();
    taskContent1.style.display = "flex";
    taskText.innerHTML = "主線任務為隨機抽取，請點選抽獎箱，抽取您的專屬個人任務"
})
taskBtn2.addEventListener('click',()=>{
    clearDiv();
    taskContent2.style.display = "flex";
    taskText.innerHTML = "每日簽到都會獲得相對應的獎勵!"
})
taskBtn3.addEventListener('click',()=>{
    clearDiv();
    taskContent3.style.display = "flex";
    taskText.innerHTML = "限時任務將會獲取其他任務更豐厚的報酬資金!"
})
taskBtn4.addEventListener('click',()=>{
    clearDiv();
    taskContent4.style.display = "flex";
    taskText.innerHTML = "每次皆有3則指定影片，為我們合作的影片衝高點擊率吧!"
})
taskBtn5.addEventListener('click',()=>{
    clearDiv();
    taskContent5.style.display = "flex";
    taskText.innerHTML = "累計任務的成就將兌換相對應的報酬資金!"
})
taskBtn6.addEventListener('click',()=>{
    clearDiv();
    taskContent6.style.display = "flex";
    taskText.innerHTML = "留言好評、訂閱頻道、按讚影片、分享影片、皆為特殊任務"
})