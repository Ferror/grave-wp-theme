<html lang="<?php get_locale(); ?>">
<?php get_header(); ?>
<body>
<?php get_sidebar(); ?>

<h1 style="color: #F23456">Home template</h1>

<main>
    <header>
        <h2>Simple information on what you will find on this website</h2>
    </header>

    <temple>
        <column>
            <article>
                <header>
                    <h3>Projects</h3>
                </header>
                <figure>
                    <img src="https://assets.malcherczyk.com/icons/512/icon_round_projects.svg" alt="Project's figure">
                </figure>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec sollicitudin arcu. Mauris semper ut est vitae mattis. Phasellus hendrerit cursus libero, ut lobortis orci pretium sit amet. Integer finibus, justo accumsan sagittis fermentum, magna ex pretium turpis, id imperdiet orci ligula sed quam. In vulputate, libero non suscipit aliquet, purus est aliquet risus, nec scelerisque nisl
                </p>
            </article>
        </column>
        <column>
            <article>
                <header>
                    <h3>Projects</h3>
                </header>
                <figure>
                    <img src="https://assets.malcherczyk.com/icons/512/icon_round_projects.svg" alt="Project's figure">
                </figure>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec sollicitudin arcu. Mauris semper ut est vitae mattis. Phasellus hendrerit cursus libero, ut lobortis orci pretium sit amet. Integer finibus, justo accumsan sagittis fermentum, magna ex pretium turpis, id imperdiet orci ligula sed quam. In vulputate, libero non suscipit aliquet, purus est aliquet risus, nec scelerisque nisl
                </p>
            </article>
        </column>
    </temple>

    <form method="post" action="https://form.malcherczyk.com">
        <header>
            <h4>Sign up for website updates</h4>
        </header>
        <label>
            <input type="text" name="_gotcha">
        </label>
        <label>
            Email
            <input type="email" name="lead_email" placeholder="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
        </label>
        <label>
            <input type="checkbox" name="lead_terms" value="I want to receive website updates email" required> I want to receive website updates email
        </label>
        <input type="hidden" name="_next" value="https://malcherczyk.com"/>
        <input type="submit" disabled>
    </form>
</main>

<?php get_footer(); ?>
</body>
</html>
