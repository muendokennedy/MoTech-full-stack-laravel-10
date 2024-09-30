
      // The set up block
      const labels1 = ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
      const dataValues1 = [0, 10, 5, 2, 20, 22, 25, 35, 32, 40, 42, 45];
      const labels2 = ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
      const dataValues2 = [0, 2, 5, 2, 8, 8, 11, 12, 20, 22, 40, 44, 45];

      // The recent signups
      const data1 = {
        labels: labels1,
        datasets: [{
          label: 'Recent signups',
          backgroundColor: 'rgb(4,46,255)',
          borderColor: 'rgb(4,46,255)',
          data: dataValues1,
          tension: 0.3,
        },
      ]
      };
      const data2 = {
        labels: labels2,
        datasets: [{
          label: 'Recent sales',
          backgroundColor: 'rgb(4,46,255)',
          borderColor: 'rgb(4,46,255)',
          data: dataValues2,
          tension: 0.3
        },
      ]
      };
      const data3 = {
        labels: labels2,
        datasets: [{
          label: 'profits per month',
          backgroundColor: 'rgb(4,46,255)',
          borderColor: 'rgb(4,46,255)',
          data: dataValues2,
          tension: 0.3,
        },
      ]
      };
      const data4 = {
        labels: [
          'New signups',
          'Orders',
          'Profits'
        ],
        datasets: [{
          label: 'activity distribution',
          data: [300, 100, 50],
          backgroundColor: [
            'rgb(252,0,0)',
            'rgb(35,35,35)',
            'rgb(4,46,255)'
          ],
          hoverOffset: 4
        },
      ]
      };
      // The config block for recent signups
      const config1 = {
        type: 'line',
        data: data1,
        options: {
          plugins: {
            legend: {
              labels: {
                font: {
                  size: 20
                }
              },
              display: true
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              title: {
                display: true,
                text: 'Number of recent signups',
                  font: {
                  size: 20
                },
                color: 'rgb(4,46,255)'
              },
              ticks: {
                font: {
                  size: 16
                }
              }
            },
            x: {
              title: {
                display: true,
                text: 'Time in months',
                font: {
                  size: 20
                },
                color: 'rgb(4,46,255)'
              },
              ticks: {
                font: {
                  size: 16
              }
            }
          }
        }
      }
    };
      const config2 = {
        type: 'line',
        data: data2,
        options: {
          plugins: {
            legend: {
              labels: {
                font: {
                  size: 20
                }
              },
              display: true
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              title: {
                display: true,
                text: 'Number of recent sales',
                  font: {
                  size: 20
                },
                color: 'rgb(4,46,255)'
              },
              ticks: {
                font: {
                  size: 16
                }
              }
            },
            x: {
              title: {
                display: true,
                text: 'Time in months',
                font: {
                  size: 20
                },
                color: 'rgb(4,46,255)'
              },
              ticks: {
                font: {
                  size: 16
              }
            }
          }
        }
      }
    };
      const config3 = {
        type: 'bar',
        data: data3,
        options: {
          plugins: {
            legend: {
              labels: {
                font: {
                  size: 16
                }
              },
              display: true
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              title: {
                display: true,
                text: 'Amount of money in dollars',
                  font: {
                  size: 16
                },
                color: 'rgb(4,46,255)'
              },
              ticks: {
                font: {
                  size: 16
                }
              }
            },
            x: {
              title: {
                display: true,
                text: 'Time in months',
                font: {
                  size: 16
                },
                color: 'rgb(4,46,255)'
              },
              ticks: {
                font: {
                  size: 16
              }
            }
          }
        }
      }
    }
      const config4 = {
        type: 'doughnut',
        data: data4,
    };

    // The render block for the first line chart
      const myChart1 = new Chart(
        document.getElementById('myChart1'),
        config1
      );
      // The render block for the second line chart
      const myChart2 = new Chart(
        document.getElementById('myChart2'),
        config2
      );
      // The bar chart
      const myChart3 = new Chart(
        document.getElementById('myChart3'),
        config3
      );
      // The doughnut  chart
      const myChart4 = new Chart(
        document.getElementById('myChart4'),
        config4
      );
