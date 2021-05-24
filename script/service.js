
const miniNewsURL = `https://newsapi.org/v2/everything?q=${settings.newsQuery}&apiKey=aaf39c15fa624d348e661905d8a71c31`;

const miniNewsPromise = fetch(miniNewsURL);
settings.newsQuery

miniNewsPromise.then(response => {
  return response.json();
}).then(news => {
  renderMiniNews(news.articles);
  renderNewsTemplate(news.articles);
  items = news.articles;
})


