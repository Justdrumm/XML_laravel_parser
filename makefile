ARGS=$(filter-out $@, $(MAKECMDGOALS))

up:
	docker-compose up -d

ps:
	docker-compose ps

nginx:
	docker-compose exec nginx sh

php:
	docker-compose exec php sh

logs:
	docker-compose logs $(ARGS)

db:
	docker-compose exec db sh
build:
	docker-compose build
down:
	docker-compose down





