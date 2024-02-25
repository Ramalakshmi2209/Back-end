TwitVille - The Social Media Platform
Welcome to TwitVille, a dynamic web application where users can connect with others, share thoughts, and engage with messages known as “tweets”. TwitVille serves as a knowledge exchange platform where users can stay updated on current world events, share news, and interact with a vibrant community.
There are 8 Tables:
1.users:user_id(PRIMARY KEY),username,email,password,screenName,profileImage,profileCover,following,followers,bio,country,website
2.Tweets:tweetid(PRIMARY KEY),status,tweetby,retweedid(FORIEGN KEY),retweetby,tweetImage,likesCount,retweetCount,postedon,retweetmsg
3.Trends:trendid,hashtag,createdon
4.Notification:notificationfor,notification from,target(all these three are foreign kens),type,time,status 
5.Messages:MessageID,message,messageTo,messagefrom(these two are foreign keys),messageon,status
6.Likes:likeid,likeby,likeon
7.follow:followid,sender,reciever(both are Foreign key),followOn
8.Comment:commentid,comment,commenton(foreign key),commentby
