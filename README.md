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


![Screenshot 2024-02-25 161318](https://github.com/Ramalakshmi2209/Back-end/assets/118355051/182df53e-2122-4776-a9cd-c50011d8e285)
![Screenshot 2024-02-25 161330](https://github.com/Ramalakshmi2209/Back-end/assets/118355051/fc328153-2c86-47b8-a2fc-a044328a8426)
![Screenshot 2024-02-25 161346](https://github.com/Ramalakshmi2209/Back-end/assets/118355051/60b4ca2c-2f23-469f-bcb6-0a16f7ed38a7)
![Screenshot 2024-02-25 161408](https://github.com/Ramalakshmi2209/Back-end/assets/118355051/72fa571e-4561-4dc3-8b39-ec967c28356d)
![Screenshot 2024-02-25 161452](https://github.com/Ramalakshmi2209/Back-end/assets/118355051/93108707-1ee9-4f71-acfd-03e4b029fc68)


![Screenshot 2024-02-25 161452](https://github.com/Ramalakshmi2209/Back-end/assets/118355051/92a3da09-0599-46dd-bf52-e3047e193d38)
![Screenshot 2024-02-25 161506](https://github.com/Ramalakshmi2209/Back-end/assets/118355051/a0db4d42-5ac7-4ab0-8a90-c103aa0a426e)
![Screenshot 2024-02-25 161523](https://github.com/Ramalakshmi2209/Back-end/assets/118355051/fda52890-0589-4bb5-b70f-8dbb28612522)
