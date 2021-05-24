const domainName = location.hostname;

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }

const settings = {  
    newsQuery : 'sport',
    pageTitle : `news about sport`,
    newsLenght : '20',
    style : 1,
    theme1 : 'bitcoin',
    theme2 : 'animals',
}

if (getCookie('theme')) { 
    settings.newsQuery = getCookie('theme');
}

document.addEventListener("DOMContentLoaded", () => { 
  const menuTemplate = document.getElementById('menum');

  menuTemplate.innerHTML += `
  <li><a onclick="setNew('${settings.theme1}')" href="">${settings.theme1}</a></li>
  <li><a onclick="setNew('${settings.theme2}')" href="">${settings.theme2}</a></li>`
});

document.title = settings.pageTitle;

const head =  document.getElementsByTagName('head')[0];
const logo = document.getElementById('logot');

function setNew(theme) {
    document.cookie = `theme="${theme}"`
    window.location.href = `${window.location.href.match(/^.*\//)}`
}

function setNewSearch() { 
    const newTheme = document.getElementById('search').value;
    document.cookie = `theme="${newTheme}"`
    window.location.href = `${window.location.href.match(/^.*\//)}`
    
}

if(settings.style == 2) {
  head.innerHTML += `<link rel="stylesheet" href="./css/second.css">`;
  logo.innerHTML = `<a href="../"><img src="./media/cropped-sport-man.png"></a>`
}

if(settings.style == 3) {
  head.innerHTML += `<link rel="stylesheet" href="./css/3.css">`;
}

document.getElementById('theme-title').innerHTML = settings.newsQuery;