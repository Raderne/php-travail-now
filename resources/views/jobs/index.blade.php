<x-layout>
    <div class="space-y-10 mb-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Trouvons ensemble votre nouvel emploi</h1>

            <!-- <form action="" method="post" class="mt-6">
                <input type="text" placeholder="Web Developer..." class="rounded-xl bg-white/5 border border-white/10 px-5 py-4 max-w-xl w-full focus:outline-none  focus:border-blue-600">
            </form> -->

            <x-forms.form class="mt-6" action="/search">
                <x-forms.input :label="false" name="q" placeholder="Web Developer..." />
            </x-forms.form>
        </section>

        <section class="pt-10">
            <x-section-heading>
                Nos caractéristiques Emplois
            </x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                <x-job-card :$job></x-job-card>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                <x-tag :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Emplois</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                <x-job-card-wide :$job></x-job-card-wide>
                @endforeach
            </div>
        </section>

    </div>
</x-layout>