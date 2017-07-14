# World Tour

In this exercise, you will create a database-driven website for a some kind of tour: it could be an author doing book signings, a band playing in different cities, or a family vacation. You can create your own data, or use the data provided in 'database-hints.md'.

## Requirements

This website will have a public-facing homepage that lists the current tour dates. It will also have admin tools that allow a user to update the tour dates. The admin tools will require authentication.

### Phase 1

<!-- 1. Clone this repo and create your own <br>anch. The branch name should be your first name + last initial (for example, 'scoobyd'). Do not make changes to the master branch. - DONE -->

<!-- 2. Create a database and a PostgreSQL user. The database user, its password, and your database name should all be your first name + last initial (for example, 'barneyr' or 'fredf'). - DONE -->

<!-- 3. Create a new Laravel project called 'App'. - DONE -->

<!-- 4. Add authentication to App. - DONE -->

<!-- 5. Create a migration to make the tours table. Include the following fields: - DONE

  id
  name
  Eloquent's default timestamps -->
<!-- 
6. Create a migration to make the stops table. Include the following fields: - DONE

  id (primary key)
  tour_id (foreign key, references id on tours)
  when (datetime)
  where (string)
  Eloquent's default timestamps
 -->
<!-- 7. Seed your tables with data. Consult 'database-hints.md' if you need help. - DONE -->

<!-- 8. Create a Stop model. Remember that stops belongTo tours. Test it in tinker. - DONE -->

<!-- 9. Create a Tour model. Remember that a tour hasMany stops. Test it in tinker. - DONE -->

<!-- 10. Create StopsController resource controller (-r flag). - DONE -->

<!-- 11. Create a ToursController resource controller (-r flag). - DONE -->

<!-- 12. Create a resource route in routes/web.php for /stops and assign StopsController to it. - DONE -->

<!-- 13. Create a resource route in routes/web.php for /tours and assign ToursController to it. - DONE -->

14. Begin working on the functions in StopsController and ToursController. - IN PROGRESS

<!-- 15. Create a README.md file in your branch and document your work. - DONE -->

16. Push your branch to origin (github).

### Phase 1 - one more thing!

We'll need to see your database to properly review your code.

From the App directory in your project, at the command prompt, type:

    pg_dump name-of-your-database > world-tour.sql

Substitute the actual name of your database for 'name-of-your-database', of course.

If world-tour.sql is created in your App directory, and it is full of comments and SQL commands, then you have done this step correctly. Make sure world-tour.sql is included when you submit your completed project branch.



