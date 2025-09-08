#!/usr/bin/env bash
set -euo pipefail


WEBROOT="/var/www/html"
SRC="/usr/src/wordpress"


# Falls Webroot leer ist, WordPress‑Core hineinkopieren
if [ -z "$(ls -A "$WEBROOT" 2>/dev/null || true)" ]; then
echo "[entrypoint] Initialisiere WordPress im Webroot …"
cp -R "$SRC"/* "$WEBROOT"/
fi


# Besitz/Rechte sicherstellen
chown -R www-data:www-data "$WEBROOT"
find "$WEBROOT" -type d -print0 | xargs -0 chmod 755
find "$WEBROOT" -type f -print0 | xargs -0 chmod 644


# Falls wp-config.php noch fehlt: Beispiel erzeugen (Daten kommen aus .env in Compose)
if [ ! -f "$WEBROOT/wp-config.php" ] && [ -n "${MYSQL_DATABASE:-}" ]; then
echo "[entrypoint] Erzeuge wp-config.php …"
sudo -u www-data wp config create \
--path="$WEBROOT" \
--dbname="$MYSQL_DATABASE" \
--dbuser="$MYSQL_USER" \
--dbpass="$MYSQL_PASSWORD" \
--dbhost="db" \
--skip-check --force
fi


# Optional: automatische Erstinstallation, wenn gewünscht und URL gesetzt
if [ -n "${WP_URL:-}" ] && [ -n "${WP_TITLE:-}" ] && [ -n "${WP_ADMIN_USER:-}" ] && [ -n "${WP_ADMIN_PASSWORD:-}" ] && [ -n "${WP_ADMIN_EMAIL:-}" ]; then
if ! sudo -u www-data wp core is-installed --path="$WEBROOT" >/dev/null 2>&1; then
echo "[entrypoint] Führe wp core install aus …"
sudo -u www-data wp core install \
--path="$WEBROOT" \
--url="$WP_URL" \
--title="$WP_TITLE" \
--admin_user="$WP_ADMIN_USER" \
--admin_password="$WP_ADMIN_PASSWORD" \
--admin_email="$WP_ADMIN_EMAIL"
fi
fi


exec "$@"