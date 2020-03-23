$.ajax({ url: '',
         data: {action: 'test'},
         type: 'post',
         success: function(output) {
                      alert(output);
                  }
});



const NewsAPI = require('newsapi');
const newsapi = new NewsAPI('1fce490764e14b8198d35850513b06ab');
// To query /v2/top-headlines
// All options passed to topHeadlines are optional, but you need to include at least one of them
newsapi.v2.topHeadlines({
  sources: 'bbc-news,the-verge',
  q: 'bitcoin',
  category: 'business',
  language: 'en',
  country: 'us'
}).then(response => {
  console.log(response);

});
