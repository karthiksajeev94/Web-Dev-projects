function polNews(){
document.getElementById("national").style.visibility="visible";
document.getElementById("international").style.visibility="visible";
document.getElementById("politics").style.visibility="hidden";
document.getElementById("finance").style.visibility="hidden";
document.getElementById("topText").innerHTML="Now pick a sub-category!";
}
function finNews(){
document.getElementById("sector").style.visibility="visible";
document.getElementById("stock").style.visibility="visible";
document.getElementById("politics").style.visibility="hidden";
document.getElementById("finance").style.visibility="hidden";
document.getElementById("topText").innerHTML="Now pick a sub-category!";
}
function stkNews(){
document.getElementById("sector").style.visibility="hidden";
document.getElementById("stock").style.visibility="hidden";
document.getElementById("aapl").innerHTML="Apple";
document.getElementById("aapl").href="https://www.wsj.com/articles/apple-to-start-putting-sensitive-encryption-keys-in-china-1519497574";
document.getElementById("aapl").onmouseover=function() {funcAapl(this.id)};
document.getElementById("aapl").onmouseout=function() {funcRevert(this.id)};
document.getElementById("goog").innerHTML="Google";
document.getElementById("goog").href="https://www.droid-life.com/2018/02/23/heres-big-google-assistant-news-announced-morning/";
document.getElementById("goog").onmouseover=function() {funcGoog(this.id)};
document.getElementById("goog").onmouseout=function() {funcRevert(this.id)};
document.getElementById("msft").innerHTML="Microsoft";
document.getElementById("msft").href="https://www.cnbc.com/2018/02/25/us-supreme-court-weighs-microsoft-privacy-fight-over-data-stored-overseas.html";
document.getElementById("msft").onmouseover=function() {funcMsft(this.id)};
document.getElementById("msft").onmouseout=function() {funcRevert(this.id)};
document.getElementById("aapl").style.visibility="visible";
document.getElementById("goog").style.visibility="visible";
document.getElementById("msft").style.visibility="visible";
document.getElementById("topText").innerHTML="Choose a company:";
}
function natNews(){
document.getElementById("national").style.visibility="hidden";
document.getElementById("international").style.visibility="hidden";
document.getElementById("aapl").innerHTML="Fox News";
document.getElementById("aapl").href="http://www.foxnews.com/politics/2018/03/01/schumer-votes-against-trump-judicial-nominee-because-hes-white.html";
document.getElementById("goog").innerHTML="USA Today";
document.getElementById("goog").href="https://www.usatoday.com/story/news/politics/2018/03/01/ohio-gov-john-kasichs-commonsense-gun-control-plan/387361002/";
document.getElementById("msft").innerHTML="CNN";
document.getElementById("msft").href="https://www.cnn.com/2018/03/01/politics/ivanka-trump-fbi-investigation/index.html";
document.getElementById("aapl").style.visibility="visible";
document.getElementById("goog").style.visibility="visible";
document.getElementById("msft").style.visibility="visible";
document.getElementById("topText").innerHTML="Choose one of the following categories:";
}
function intNews(){
document.getElementById("national").style.visibility="hidden";
document.getElementById("international").style.visibility="hidden";
document.getElementById("aapl").innerHTML="Fox News";
document.getElementById("aapl").href="http://www.foxnews.com/world/2018/03/01/guatemala-judge-oks-corruption-probe-for-ex-president.html";
document.getElementById("goog").innerHTML="USA Today";
document.getElementById("goog").href="https://www.usatoday.com/story/news/world/2018/03/01/russias-putin-boasts-all-powerful-nuclear-missile/384142002/";
document.getElementById("msft").innerHTML="CNN";
document.getElementById("msft").href="https://www.cnn.com/2018/03/01/middleeast/putin-blames-rebels-ceasefire-syria-intl/index.html";
document.getElementById("aapl").style.visibility="visible";
document.getElementById("goog").style.visibility="visible";
document.getElementById("msft").style.visibility="visible";
document.getElementById("topText").innerHTML="Choose one of the following categories:";
}
function secNews(){
document.getElementById("sector").style.visibility="hidden";
document.getElementById("stock").style.visibility="hidden";
document.getElementById("aapl").innerHTML="Fox Business";
document.getElementById("aapl").href="http://www.foxbusiness.com/markets/weinstein-co-to-sell-assets-in-500-million-deal";
document.getElementById("goog").innerHTML="USA Today";
document.getElementById("goog").href="https://www.usatoday.com/story/money/2018/03/01/president-donald-trumps-plan-impose-heavy-tariffs-imported-steel-and-aluminum-could-increase-jobs-bu/386419002/";
document.getElementById("msft").innerHTML="Wall Street Journal";
document.getElementById("msft").href="https://www.wsj.com/articles/jpmorgan-dealmaker-revs-up-to-join-alibaba-backed-electric-car-company-1519897035";
document.getElementById("aapl").style.visibility="visible";
document.getElementById("goog").style.visibility="visible";
document.getElementById("msft").style.visibility="visible";
document.getElementById("topText").innerHTML="Choose one of the following categories:";
}
function funcAapl(elId){
document.getElementById(elId).style.background = "#082b91";
document.getElementById(elId).style.backgroundImage = "url(https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg)";
}
function funcGoog(elId){
document.getElementById(elId).style.background = "#082b91";
document.getElementById(elId).style.backgroundImage = "url(https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg)";
}
function funcMsft(elId){
document.getElementById(elId).style.background = "#082b91";
document.getElementById(elId).style.backgroundImage = "url(https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg)";
}
function funcRevert(elId){
document.getElementById(elId).style.background = "#082b91";
document.getElementById(elId).style.background = "#082b91";
}