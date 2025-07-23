<x-layout>
    <x-page-heading>New job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$90,000" />
        <x-forms.input label="Location" name="location" placeholder="Remote" />

        <x-forms.select label="Schedule" name='schedule'>
            <option>Part time</option>
            <option>Full time</option>
            <option>Temporary</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="example.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laraca, managment, jome office" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
