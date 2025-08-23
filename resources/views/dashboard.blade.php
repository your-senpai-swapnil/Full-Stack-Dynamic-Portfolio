@extends('index')
@push('style')
    <title>Dashboard - JOYBOY'S PORTFOLIO</title>
    <style>
        .dashboard-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
        }

        .dashboard-header {
            background: var(--bg-light);
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            text-align: center;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .dashboard-card {
            background: var(--bg-light);
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .dashboard-card h3 {
            color: var(--accent-color);
            margin-bottom: 1rem;
            border-bottom: 2px solid var(--accent-color);
            padding-bottom: 0.5rem;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: var(--accent-color);
        }

        .quick-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1rem;
        }

        .action-btn {
            background: var(--accent-color);
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s;
        }

        .action-btn:hover {
            background: #e67e22;
        }

        .secondary-btn {
            background: #6c757d;
        }

        .secondary-btn:hover {
            background: #5a6268;
        }

        .recent-activity {
            background: var(--bg-light);
            padding: 1.5rem;
            border-radius: 10px;
            margin-top: 2rem;
        }

        .activity-item {
            padding: 0.75rem;
            border-bottom: 1px solid #444;
            color: var(--text-color);
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-date {
            color: #888;
            font-size: 0.9rem;
        }
    </style>
@endpush

@section('main-content')
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h1>Welcome to your Dashboard, {{ Auth::user()->name }}!</h1>
            <p>Manage your portfolio content and view analytics</p>
        </div>

        <div class="dashboard-grid">
            <div class="dashboard-card">
                <h3>Portfolio Stats</h3>
                <div class="stat-number">{{ Auth::user()->projects()->count() ?? 0 }}</div>
                <p>Total Projects</p>
                <div class="stat-number">{{ Auth::user()->skills()->count() ?? 0 }}</div>
                <p>Skills Listed</p>
                <div class="stat-number">{{ Auth::user()->experiences()->count() ?? 0 }}</div>
                <p>Work Experiences</p>
            </div>

            <div class="dashboard-card">
                <h3>Quick Actions</h3>
                <div class="quick-actions">
                    <a href="#" class="action-btn">Add New Project</a>
                    <a href="#" class="action-btn">Manage Skills</a>
                    <a href="#" class="action-btn">Update Profile</a>
                    <a href="#" class="action-btn secondary-btn">View Analytics</a>
                </div>
            </div>

            <div class="dashboard-card">
                <h3>Account Settings</h3>
                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <p><strong>Member since:</strong> {{ Auth::user()->created_at->format('M d, Y') }}</p>
                <div class="quick-actions">
                    <a href="#" class="action-btn secondary-btn">Edit Profile</a>
                    <a href="#" class="action-btn secondary-btn">Change Password</a>
                </div>
            </div>
        </div>

        <div class="recent-activity">
            <h3>Recent Activity</h3>
            <div class="activity-item">
                <strong>Portfolio Updated</strong>
                <div class="activity-date">Today at 2:30 PM</div>
                <p>Updated project descriptions and added new skills</p>
            </div>
            <div class="activity-item">
                <strong>Profile Viewed</strong>
                <div class="activity-date">Yesterday at 4:15 PM</div>
                <p>Your portfolio was viewed by 12 visitors</p>
            </div>
            <div class="activity-item">
                <strong>New Project Added</strong>
                <div class="activity-date">3 days ago</div>
                <p>Added "Task Management App" to your projects</p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="/" class="action-btn">← Back to Portfolio</a>
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="action-btn secondary-btn">Logout</button>
            </form>
        </div>
    </div>
@endsection
