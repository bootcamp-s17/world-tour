# World Tour

In this exercise, you will create a database-driven website for a some kind of tour: it could be an author doing book signings, a band playing in different cities, or a family vacation. You can create your own data, or use the data provided in 'database-hints.md'.

## Requirements

This website will have a public-facing homepage that lists the current tour dates. It will also have admin tools that allow a user to update the tour dates. The admin tools will require authentication.

### Phase 1

1. Clone this repo and create your own branch. The branch name should be your first name + last initial (for example, 'scoobyd'). Do not make changes to the master branch.

2. Create a database and a PostgreSQL user. The database user, its password, and your database name should all be your first name + last initial (for example, 'barneyr' or 'fredf').

3. Create a new Laravel project called 'App'.

4. Add authentication to App.

5. Create a migration to make the tours table. Include the following fields:

  id
  name
  Eloquent's default timestamps

6. Create a migration to make the stops table. Include the following fields:

  id (primary key)
  tour_id (foreign key, references id on tours)
  when (datetime)
  where (string)
  Eloquent's default timestamps

7. Seed your tables with data. Consult 'database-hints.md' if you need help.

8. Create a Stop model. Remember that stops belongTo tours. Test it in tinker.

9. Create a Tour model. Remember that a tour hasMany stops. Test it in tinker.

10. Create StopsController resource controller (-r flag).

11. Create a ToursController resource controller (-r flag).

12. Create a resource route in routes/web.php for /stops and assign StopsController to it.

13. Create a resource route in routes/web.php for /tours and assign ToursController to it.

14. Begin working on the functions in StopsController and ToursController.


