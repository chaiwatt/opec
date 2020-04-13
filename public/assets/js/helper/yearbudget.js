function selectYear(id) {
    return new Promise((resolve, reject) => {
      $.ajax({
        url: `${route.url}/api/setting/general/selectyear`,
        type: 'POST',
        headers: {"X-CSRF-TOKEN":route.token},
        data: {
            id : id,
        },
        success: function(data) {
          resolve(data)
        },
        error: function(error) {
          reject(error)
        },
      })
    })
  }

  function addYear(year) {
    return new Promise((resolve, reject) => {
      $.ajax({
        url: `${route.url}/api/setting/general/addyear`,
        type: 'POST',
        headers: {"X-CSRF-TOKEN":route.token},
        data: {
          year : year,
        },
        success: function(data) {
          resolve(data)
        },
        error: function(error) {
          reject(error)
        },
      })
    })
  }

  export {selectYear,addYear}