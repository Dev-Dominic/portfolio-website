<?php

namespace Database\Seeders;

use App\Models\Projects;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project_images = url('project_images');
        $projects = [
            // Work
            [
                'image' => "{$project_images}/emr.png",
                'title' => 'Electronic Medical System (EMR)',
                'description' => 'Electronic Medical System (EMR) used to centralize patient records and manage daily operations of a medical center in Jamaica. Key features built included an Appointment and Visit Management feature, which was facilitated through a drag-and-drop functionality to move between the different visit statements within the center.',
                'techStack' => 'Nextjs, Chakra UI (React Library), TRPC, Prisma, NextAuth',
                'type' => 'work'
            ],
            [
                'image' => "{$project_images}/jjway_accreditation.png",
                'title' => 'JJway Accreditation',
                'description' => 'JJway Accreditation is a customized web application developed for CommonSense Childbirth that was built to train and certify maternity clinics. Features include a learning management system, accreditation workflow, scheduling, live consultations, In-app evaluations, metrics and reporting.',
                'techStack' => 'NextJS, TRPC, Chakra UI, NextAuth, Auth0, NestJS',
                'type' => 'work'
            ],
            [
                'image' => "{$project_images}/jjway_clinical_tracker.png",
                'title' => 'JJway Clinical Tracker',
                'description' => 'JJway Clinical Tracker is a customized web application developed for CommonSense Childbirth that was built to train and certify midwifery students. Features include a user management, learning management system and customized surveys for tracking student course completions.',
                'techStack' => 'NextJS Charka UI, NextAuth, TRPC, StrapiJS',
                'type' => 'work',
            ],
            [
                'image' => "{$project_images}/pattoo.png",
                'title' => 'Pattoo Project (Open Source)',
                'description' => 'Pattoo is an Open-Source project (by Palisadoes Foundation) that stores time series data in a database and makes it available for users via a GraphQL API. The core project is built using Flask, a lightweight python framework. The data can be accessed directly via the API or a web platform called Pattoo-web to visualize the data stored.',
                'techStack' => 'Flask (Python) GraphQL, ReactJS',
                'type' => 'work',
                'link' => 'https://palisadoesfoundation.github.io/pattoo.github.io/'
            ],
            [
                'image' => "{$project_images}/sagebysagicor.png",
                'title' => 'SAGE By Sagicor',
                'description' => 'Sage By Sagicor was a content website that was built to host and stream special videos and events for the Sagicor Group Companies (https://www.sagicor.com/). The platform was built using WordPress, and customized based on client needs utilizing PHP, JavaScript and WordPress Plugins.',
                'techStack' => 'WordPress PHP',
                'type' => 'work',
            ],
            // Personal
            [
                'image' => "{$project_images}/youtube_to_spotify_playlist.png",
                'title' => 'Youtube to Spotify Playlist Generator',
                'description' => 'As an avid user of both Youtube and Spotify, oftentimes I may utilize youtube to find songs and create small video playlists. To have these songs synced between both Youtube and Spotify I built a small script that helps to create a Spotify Playlist from a Youtube Playlist.

This script utilizes both the Google and Spotify playlist.',
                'techStack' => 'Python',
                'type' => 'personal',
                'link' => 'https://github.com/Dev-Dominic/Youtube-Spotify-Playlist-Generator'
            ],
            // Writing
            [
                'title' => 'Build Type-Safe JavaScript Apps with TypeScript and Zod',
                'type' => 'writing',
                'link' => 'https://norustech.com/building-type-safe-javascript-apps-with-typescript-zod/',
            ],
            [
                'title' => 'Here’s what I’ve learned about working for a tech startup',
                'type' => 'writing',
                'link' => 'https://x.com/dominic_a_henry/status/1721193798058057747?s=46'
            ],
        ];

        foreach($projects as $project) {
            Projects::create($project);
        }
    }
}
