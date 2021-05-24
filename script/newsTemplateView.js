const miniNewsTemplate = document.getElementById('mini-news-template');
const newsTemplate = document.getElementById('news-template');


function getNew(id) {
    document.cookie=`new=${id}`;
    window.location.href = `${window.location.href.match(/^.*\//)}new.php`;
}



const renderMiniNews = (item) => { 
    
    item.forEach( (element , i) => { 

        if(element.urlToImage && i < 10) {
        miniNewsTemplate.innerHTML += `
        <div class="some-new">
        <img src="${element.urlToImage}" width="100%">
        <br><br>
        <h4> ${element.title} </h4>
        <br>
        <p> ${element.description} </p><br><br>
        </div>
        `
        }
    })
}

const renderNewsTemplate = (item) => {

    const mainNews = item.reverse();
    if(newsTemplate){
        mainNews.forEach( (element, i) => {
            if(element.urlToImage) {
            newsTemplate.innerHTML += `
            <div class="some-new" id="${i}">
            <h4> ${element.title} </h4><br>
            <img src="${element.urlToImage}" width="100%">
            <br><br><br>
            <p> ${element.description} </p>
            <p> ${element.content.replace('chars' , 'Rate')} </p>
            <button class="read-more" onclick="getNew(${i})"> Read more </button>
            <br><br>
            </div>
            `
            }
    }); 
 }
}

