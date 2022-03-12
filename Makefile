DOCKER_CMD=docker-compose exec app bash

_config-env:
	[ -f .env ] || cp .env.example .env

build-image: _config-env
	docker-compose up -d --build

bash:
	${DOCKER_CMD}

