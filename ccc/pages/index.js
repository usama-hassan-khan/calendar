import Head from 'next/head'
import Image from 'next/image'
import styles from '../styles/Home.module.css'
import { Calendar, momentLocalizer } from 'react-big-calendar'
import moment from 'moment'
import events from './events';
import "react-big-calendar/lib/css/react-big-calendar.css";
export default function Home() {
    const localizer = momentLocalizer(moment)
  return (
    <div>
    <Calendar
      localizer={localizer}
      events={events}
      startAccessor="start"
      endAccessor="end"
      style={{ height: 500 }}
    />
  </div>
  )
}
