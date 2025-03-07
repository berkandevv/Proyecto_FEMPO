# Onboarding Devs

## Descripción del Proyecto

El proyecto **Onboarding Devs** está diseñado como un proceso de incorporación para preparar a nuevos integrantes en un equipo de desarrollo de aplicaciones web. Su objetivo principal es proporcionar una experiencia práctica que permita interiorizar el ritmo de trabajo, comprender la metodología ágil y consolidar los conceptos necesarios para desempeñar funciones en el ámbito del desarrollo web.

Durante este proyecto, los participantes trabajarán en un entorno simulado, desarrollando habilidades clave en backend con Symfony y frontend con Next.js, React y TypeScript, replicando las tareas y responsabilidades de un rol real en un equipo de desarrollo.

**Nota:** En equipos especializados, el backend y el frontend suelen estar en repositorios separados. Sin embargo, para facilitar el onboarding, en este proyecto ambos están integrados en el mismo repositorio dentro de la carpeta `src`.

## Metodología

Este proyecto utiliza un marco de trabajo basado en **Scrum-like**, adaptado a un entorno de incorporación profesional:

- **Equipos:** Máximo de 30 participantes organizados en subgrupos, con la guía de un tutor o mentor.
- **Duración:** 3 semanas, con un horario de 7.5 horas al día de lunes a viernes.
- **Sprints:** 2 principales de 2 semanas, con un tercero opcional dedicado a estabilización y mejoras.
- **Ceremonias:**
  - **Daily Standups:** Revisión rápida del progreso diario.
  - **Sprint Planning:** Planificación del trabajo para cada sprint, estimando tareas con planning poker (1 punto = 1 hora).
  - **Sprint Retrospective y Demo:** Revisión de logros y presentación del trabajo al finalizar cada sprint.

La estructura y las tareas del backlog están diseñadas para simular las dinámicas reales de trabajo en un equipo de desarrollo, priorizando su aplicabilidad en el mercado laboral.

## Objetivos del Proyecto

- Diseñar, desarrollar y documentar una aplicación web completa que integre backend y frontend.
- Aprender a usar herramientas modernas como Symfony, Next.js, y prácticas de desarrollo ágil.
- Adquirir experiencia en el trabajo en equipo bajo un marco ágil.
- Preparar a los participantes para integrarse eficientemente en un equipo de desarrollo.

## Inicio Rápido

1. **Configura el equipo y el proyecto:**
   - Crea una organización en GitHub y realiza un fork del repositorio base.
   - Ejecuta el workflow `create-and-populate.yml` para inicializar el backlog.

2. **Consulta el backlog:**
   - Revisa el archivo [backlog.md](./backlog/readme.md) para conocer las tareas iniciales y generales del proyecto.

3. **Comienza a trabajar:**
   - Sigue las instrucciones y referencias en el backlog para completar las tareas asignadas durante los sprints.

## Salidas Profesionales

Como desarrollador de aplicaciones web, te puedes especializar en múltiples salidas profesionales, organizadas por nivel de demanda y detalle en los archivos relacionados:

- **Desarrollador Backend:** Especialista en lógica de negocio y APIs.
- **Desarrollador Frontend:** Diseñador y constructor de interfaces de usuario modernas.
- **Fullstack Developer:** Profesional capaz de integrar backend y frontend.

Este proyecto se enfoca en proporcionar experiencia práctica en roles relacionados con desarrollo web.

## Tecnologías Utilizadas

- **Backend:** Symfony, PHPUnit, Behat.
- **Frontend:** Next.js, React, TypeScript, Tailwind CSS.
- **Bases de datos:** DynamoDB (local con Docker).
- **Testing:** Jest, React Testing Library, Playwright.
- **Sincronización:** APIs REST, Swagger, GraphQL schemas, mocks.

## Estructura del Proyecto

El proyecto se organiza en sprints que cubren los siguientes objetivos:

1. **Sprint 1:** Configuración inicial del entorno y desarrollo básico del backend.
2. **Sprint 2:** Desarrollo del frontend y sincronización con el backend.
3. **Sprint 3 (opcional):** Integración final y estabilización del proyecto.

El código del proyecto se encuentra en la carpeta `src`, dividido en:

- **`src/backend/`**: Código relacionado con el backend en Symfony.
- **`src/frontend/`**: Código relacionado con el frontend en Next.js.

Un archivo `docker-compose.yaml` en la raíz del repositorio orquesta ambos entornos, gestionando también volúmenes compartidos en Docker para un desarrollo eficiente.

## Requisitos para Participar

- Conocimientos básicos de programación y bases de datos.
- Cuenta activa en GitHub para colaborar en los repositorios del proyecto.
- Acceso a herramientas como Docker para las prácticas.

## Documentación Adicional

- **[Backlog completo](./backlog/readme.md):** Se encuentra documentado como parte del proyecto. Se vuelca como proyecto en GitHub con GitHub Actions.
- **[Git flow](./resources/git_flow.md):** Más información acerca de la política de branching del proyecto.
- **Guías paso a paso:** Instrucciones detalladas para cada tarea del proyecto.

---

Este proyecto está diseñado para proporcionar una experiencia práctica en la dinámica de un equipo de desarrollo, fortaleciendo las competencias técnicas y metodológicas necesarias para enfrentar los desafíos del sector IT. ¡Bienvenido al proyecto Onboarding Devs!
