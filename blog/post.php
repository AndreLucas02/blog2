<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"> <?= $currentPost["title"] ?> </h1>
        <p id="post-description"> <?= $currentPost['description'] ?> </p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur distinctio ipsam quidem molestias ratione. Possimus natus commodi assumenda sapiente aliquam porro eaque nihil nulla, beatae delectus magni quis saepe voluptas.
            Enim qui veniam rerum quam tempore dolore quasi nemo reiciendis, labore distinctio totam sed laudantium mollitia. Ut inventore eum, nobis quisquam animi provident voluptate similique eveniet non voluptas? Cum, voluptas!
            Voluptates placeat assumenda tenetur, deserunt vero nisi. Repellat recusandae molestiae accusantium autem! Quod neque numquam maxime excepturi quasi blanditiis placeat ducimus, sint qui ullam, incidunt recusandae aliquam exercitationem sapiente amet.
            Sequi magni similique impedit veritatis quia aliquid ipsam laudantium cum recusandae provident molestiae, minus sit eveniet, vero deserunt, eligendi labore itaque voluptatem temporibus culpa! Impedit ex assumenda doloribus quod fugiat.
            Dolores, inventore, porro aliquid placeat culpa sint maxime cum ea obcaecati temporibus beatae perspiciatis vel impedit odit exercitationem excepturi, aspernatur quos voluptate unde necessitatibus accusantium rem! Officia, labore debitis. Non. </p>
        <p class="post-content"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima doloribus et veniam quae officiis nihil laudantium aperiam! Ad suscipit consequatur culpa, autem officia laudantium, tenetur nam nemo doloribus, id repellat.
            Eum animi pariatur ipsum porro, dolorum nesciunt aliquam illum non nihil praesentium neque reprehenderit dolore? Nemo, magnam! Iusto natus corrupti, inventore magni iure, id est alias ab doloremque, necessitatibus atque!
            Unde, numquam porro. Sapiente laboriosam vero reiciendis voluptas totam, sunt delectus quia voluptate molestiae vitae itaque doloribus impedit nostrum ab aliquam iste explicabo nihil, voluptatibus natus eaque recusandae hic laudantium?
            Voluptas dignissimos id, eius quibusdam corrupti quisquam culpa, ut consequuntur iste amet aliquid odio ducimus ea sint deleniti at saepe repellendus perferendis minus! Non quia tempore fugit consequatur, nobis quibusdam?
            Vel esse deleniti cupiditate est molestias dolores harum rerum dolorem quos animi doloremque repellat earum molestiae autem aut eveniet eos libero, tenetur ut, ratione praesentium perspiciatis aperiam accusantium ea! Blanditiis? </p>
    </div>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"> <?= $tag ?> </a></li>
            <?php endforeach; ?>
        </ul>

        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"> <?= $category ?> </a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>


<?php
include_once("templates/footer.php")
?>