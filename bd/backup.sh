#bin/bash
docker compose exec basedatos /bin/bash -c "mariadb-dump -uuser -p'abc123.' db" >./bd/backup.sql
