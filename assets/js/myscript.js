 function commentpost(){
            let text=document.getElementById("tweetInput").value.trim();
            if(text==="")return;
            let tweetHtml=`
            <div class="tweet">
            <strong>User</strong><span class="text-muted">@username</span>
            <p>${text}</p>
            </div>
            `;
            let feed=document.getElementById("feedArea");
            feed.innerHTML=tweetHtml+feed.innerHTML;
            document.getElementById("tweetInput").value="";
        }