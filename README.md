# video-analytics-player-backend

## Project setup
```
php artisan migrate
```

### Run project
```
php artisan serve
```

### Download docker 
#### for Mac
```
https://docs.docker.com/v17.12/docker-for-mac/install/#download-docker-for-mac
```

#### for Windows
```
https://hub.docker.com/editions/community/docker-ce-desktop-windows
```

### Run ElasticSearch
```
docker run -d -p 9200:9200 -p 9300:9300 -it -h elasticsearch --name elasticsearch elasticsearch:6.7.0
```

### Run Kibana
```
docker run -d  -p 5601:5601 -h kibana --name kibana --link elasticsearch:elasticsearch kibana:6.7.0
```