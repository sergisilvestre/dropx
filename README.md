# DropX – E-commerce Platform

**Backend:** Laravel 11 (DDD + REST + GraphQL)
**Frontend:** Nuxt 3 + TypeScript

DropX es una plataforma de comercio electrónico multi-tenant que permite a vendedores gestionar sus tiendas, productos y pedidos, integrando pagos, notificaciones y proveedores de dropshipping en un ecosistema escalable y seguro.

---

## Tabla de Contenidos

* [Características Principales](#características-principales)
* [Arquitectura](#arquitectura)
* [Tecnologías](#tecnologías)
* [Estructura del Proyecto](#estructura-del-proyecto)
* [Bases de Datos](#bases-de-datos)
* [Infraestructura / DevOps](#infraestructura--devops)
* [Seguridad](#seguridad)
* [Qué demuestra este proyecto](#qué-demuestra-este-proyecto)
* [Instalación y Ejecución](#instalación-y-ejecución)

---

## Características Principales

### Backend (Laravel 11)

* **Usuarios:** autenticación, roles (admin, vendedor, cliente)
* **Tiendas:** configuración, branding, URLs personalizadas
* **Productos:** catálogo, categorías, variantes
* **Pedidos:** gestión de estados (pendiente, enviado, completado)
* **Proveedores:** integración con APIs externas de dropshipping
* **Pagos:** Stripe / PayPal
* **Notificaciones:** correos, WebSockets
* **Analytics:** métricas y reportes de ventas

### Frontend (Nuxt 3 + TypeScript)

* UI responsiva con **TailwindCSS + shadcn/ui**
* SSR/SPA híbrido: SEO-friendly
* Rutas principales:

  * `/` – landing page con tiendas destacadas
  * `/shop/:storeSlug` – tienda de un vendedor
  * `/product/:id` – detalle de producto
  * `/cart` – carrito de compras
  * `/dashboard` – gestión de pedidos, productos y proveedores
* Autenticación JWT + Refresh tokens
* Carrito persistente (localStorage + API sync)
* Integración con Stripe y PayPal
* Testing: Cypress (E2E) + Vitest (unit tests)

### Microservicios

* **Notificaciones:** Node.js + Redis pub/sub, envío de correos y push notifications
* **Integrador de Proveedores:** Python FastAPI, sincronización de productos y precios, tareas programadas con Celery + Redis

---

## Arquitectura

* Backend: **DDD (Domain-Driven Design) + REST + GraphQL**
* Frontend: **SSR + SPA híbrido con Nuxt 3**
* Microservicios desacoplados para notificaciones y proveedores
* Event-driven: **Eventos, Jobs, Queues con Redis**
* Logging estructurado con Monolog (JSON + Loki)

---

## Tecnologías

* **Backend:** Laravel 11, Sanctum/Passport, Lighthouse GraphQL, Redis, Pest
* **Frontend:** Nuxt 3, TypeScript, TailwindCSS, shadcn/ui
* **Microservicios:** Node.js, FastAPI, Redis, Celery
* **DevOps / Infra:** Docker, Kubernetes (EKS/GKE), Terraform, GitHub Actions/GitLab CI, S3 + CloudFront, Prometheus + Grafana, Loki
* **Seguridad:** OWASP, JWT, Rate limiting, CORS dinámico, sanitización de inputs

---

## Estructura del Proyecto

```text
dropx/
│
├── frontend/ (Nuxt 3 + TS)
│   ├── components/
│   ├── pages/
│   ├── composables/
│   ├── tests/
│
├── backend-api/ (Laravel 11)
│   ├── app/Domain/
│   ├── app/Infrastructure/
│   ├── app/Application/
│   ├── routes/api.php
│   ├── graphql/
│   └── tests/
│
├── services/
│   ├── notifications/ (Node + Redis)
│   └── supplier-sync/ (Python + FastAPI)
│
├── docker/
│   ├── Dockerfile.api
│   ├── Dockerfile.front
│   └── docker-compose.yml
│
├── infra/
│   ├── terraform/
│   └── k8s/
│
└── docs/
    ├── architecture.md
    ├── api-spec.yaml
    └── roadmap.md
```

---

## Bases de Datos

* **PostgreSQL:** usuarios, pedidos, productos, tiendas
* **MongoDB:** logs, historial de sincronización, auditoría
* **Redis:** caché, colas de background jobs

---

## Infraestructura / DevOps

* Docker Compose para desarrollo local
* Kubernetes (EKS o GKE) en producción
* Terraform para IaC (DBs, buckets S3, EKS)
* CI/CD con GitHub Actions/GitLab CI: Lint → Tests → Docker Build → K8s Deploy
* Almacenamiento y CDN: S3 + CloudFront
* Monitoreo y logging: Prometheus + Grafana, Loki

---

## Seguridad

* OWASP aplicado (XSS, CSRF, SQLi, Auth seguro)
* JWT firmados + Refresh tokens
* CORS dinámico por tenant/tienda
* Rate limiting con Redis
* Sanitización de inputs con DTOs

---

## Qué demuestra este proyecto

| Área            | Habilidad demostrada                |
| --------------- | ----------------------------------- |
| Frontend        | Nuxt 3, TypeScript, SSR, SEO, UI/UX |
| Backend         | Laravel 11, GraphQL, DDD, REST APIs |
| Integraciones   | Dropshipping APIs, Stripe/PayPal    |
| Infraestructura | Docker, K8s, Terraform, CI/CD       |
| Microservicios  | Node.js, FastAPI, Redis, RabbitMQ   |
| Testing         | Unit + Integration + E2E            |
| Seguridad       | OWASP, Tokens, Rate limiting        |
| Escalabilidad   | Microservicios, Caching, Queues     |

---

## Instalación y Ejecución (Desarrollo)

1. Clonar el repositorio:

```bash
git clone https://github.com/tuusuario/dropx.git
cd dropx
```

2. Configurar variables de entorno (`.env`) para backend y frontend.

3. Levantar servicios con Docker Compose:

```bash
docker-compose up --build
```

4. Backend: migraciones y seeders

```bash
docker-compose exec backend php artisan migrate --seed
```

5. Frontend: desarrollo

```bash
docker-compose exec frontend npm run dev
```

6. Ejecutar tests:

```bash
# Backend
docker-compose exec backend ./vendor/bin/pest
# Frontend
docker-compose exec frontend npm run test
```