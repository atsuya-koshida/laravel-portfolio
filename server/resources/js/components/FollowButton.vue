<template>
  <div class="user-section__top--right">
    <a
      class="follow-btn"
      :class="buttonColor"
    >
      <i
        :class="buttonIcon"
      ></i>
      {{ buttonText }}
    </a>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        isFollowedBy: false,
      }
    },
    computed: {
      buttonColor() {
        return this.isFollowedBy
          ? 'followed-btn'
          : 'follow-btn'
      },
      buttonIcon() {
        return this.isFollowedBy
          ? 'fas fa-user-check'
          : 'fas fa-user-plus'
      },
      buttonText() {
        return this.isFollowedBy
          ? 'フォロー中'
          : 'フォロー'
      },
    },
  }
</script>