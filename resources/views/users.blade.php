<x-layout>
    <section class="px6 py2">
        <div class="px-4 py-4">
        @if (!empty($users))
        <h1>{{ $users->count() }} Registered Users</h1>

            <table class="px-4 py-4">
                <thead>
                    <tr>
                        <th class="px-4 py-4">Id</th>
                        <th class="px-4 py-4">User name</th>
                        <th class="px-4 py-4">Location</th>
                        <th class="px-4 py-4">Admin?</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="px-4 py-4">{{ $user->id }}</td>
                            <td class="px-4 py-4">{{ $user->name }}</td>
                            <td class="px-4 py-4">{{ $user->location }}</td>
                            <td class="px-4 py-4">
                                @if ($user->is_admin)
                                *
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- <h2>{{ $user->name }} - {{ $user->location }}  -->
                 <!-- @if ($user->is_admin) -->
                 <!-- * -->
                 <!-- @endif -->
            <!-- </h2> -->
            <!-- <hr> -->

        <p> * = user is an Admin</p>
        @else
        <h1>You can't view this information unless you are an Admin. Apologies.</h1>
        @endif

        </div>
    </section>
</x-layout>