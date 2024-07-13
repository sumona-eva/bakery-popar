
<template>
    <Bar
      id="my-chart-id"
      :options="chartOptions"
      :data="chartData"
      class="w-full text-white"
    />
  </template>
  
  <script>
  import { Bar } from 'vue-chartjs'
  import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'
  
  ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)
  
  export default {
    name: 'BarChart',
    components: { Bar },
    data() {
      return {
        chartData: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August'],
          datasets: [{
            label: 'Product Sales Record - 2024',
            data: [65, 59, 80, 75, 56, 55, 40, 81],
            backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
            ],
            borderWidth: 1
          }]
        },
        chartOptions: {
          responsive: true,
          scales: {
            x: {
              ticks: {
                color: '#065f46' // color of x-axis labels
              }
            },
            y: {
              ticks: {
                color: '#065f46' // color of y-axis labels
              }
            }
          },
          plugins: {
            legend: {
              labels: {
                color: '#065f46' // color of legend text
              }
            },
          }
        }
      }
    }
  }
  </script>
  
